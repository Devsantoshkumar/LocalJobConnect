
$(document).ready(function(){

    const baseUrl = $("#baseUrl").val()


    // request for fetch user profile image
    function getProfileImage(){

        let userid = $("#userId").val();

        if(userid){
            $.ajax({
                url: `${baseUrl}empdetail/profile_fetch/${userid}`,
                type: 'GET',
                success: function(response){
                    let data = JSON.parse(response);
                    let image = `${baseUrl}uploads/${data[0].image}`;
                    $("#profileImageShow").attr('src', image);
                }
            })
        }
    }

    getProfileImage()

    
    // request for change or upload profile image
    $("#profileImage").change(function(e){

        let userid = $("#userId").val();

        let file = this.files[0];
        let formData = new FormData();
        formData.append("image", file);

        $.ajax({
            url: `${baseUrl}empdetail/profile_upload/${userid}`,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                let data = JSON.parse(response);
                
                if(typeof data.imagesuccess !== 'undefined'){

                    getProfileImage()
                    showErrorAlert(data.imagesuccess, 'success');
                    
                }else if(typeof data.imageSize !== "undefined"){

                    showErrorAlert(data.imageSize, 'error');
                    
                }else if(typeof data.imageType !== 'undefined')
                {
                    showErrorAlert(data.imageType, 'error');
                }
            }
        })

    })




     // request for fetch user banner image
     function getBannerImage(){

        let userid = $("#uid").val();

        if(userid){
            $.ajax({
                url: `${baseUrl}empdetail/userbanner_fetch/${userid}`,
                type: 'GET',
                success: function(response){
                    let data = JSON.parse(response);
                    let image = `${baseUrl}uploads/${data[0].cover}`;
                    $("#bannerImageShow").attr('src', image);
                }
            })
        }
    }

    getBannerImage()

    
    // request for change or upload banner image
    $("#bannerImage").change(function(e){

        let userid = $("#uid").val();

        let file = this.files[0];
        let formData = new FormData();
        formData.append("cover", file);

        $.ajax({
            url: `${baseUrl}empdetail/userbanner_upload/${userid}`,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                let data = JSON.parse(response);
                
                if(typeof data.imagesuccess !== 'undefined'){

                    getBannerImage()
                    showErrorAlert(data.imagesuccess, 'success');
                    
                }else if(typeof data.imageSize !== "undefined"){

                    showErrorAlert(data.imageSize, 'error');
                    
                }else if(typeof data.imageType !== 'undefined')
                {
                    showErrorAlert(data.imageType, 'error');
                }
            }
        })

    })



    function fetchCountries(){
        $.ajax({
            url: `${baseUrl}signup/fetch_countries`,
            type: "GET",
            success: function(response){
                let data = JSON.parse(response);
                countries = $("#country");
                $.each(data, function(index, country) {
                    countries.append(`<option value="${country.countrys_id}">${country.country_name}</option>`);
                });
            }
        })
    }

    fetchCountries()


    $("#country").on("change", function(e)
    {
        let countryId = $(this).val();
        if(countryId){

            $.ajax({
                url: `${baseUrl}signup/fetch_states/${countryId}`,
                type: 'GET',
                success: function(response){
                    let data = JSON.parse(response)
                    states = $("#state");
                    cities = $("#city");
                    states.empty();
                    cities.empty();
                    states.append(`<option value="">Select State</option>`);
                    cities.append(`<option value="">Select City</option>`);
                    $.each(data, function(index, state) {
                        states.append(`<option value="${state.states_id}">${state.state_name}</option>`);
                    });
                }
            })

        }else{
            states.empty();
            $("#city").empty();
        }
    })



    $("#state").on("change", function(){
        let stateId = $(this).val();
        
        if(stateId){

            $.ajax({
                url: `${baseUrl}signup/fetch_cities/${stateId}`,
                type: 'GET',
                success: function(response){
                    let data = JSON.parse(response);
                    cities = $("#city");
                    cities.empty();
                    cities.append(`<option value="">Select City</option>`);
                    $.each(data, function(index, city) {
                        cities.append(`<option value="${city.citys_id}">${city.city_name}</option>`);
                    });
            }
            })

        }else{
            cities.empty();
        }
    })




    


    // error massage alert
    function showErrorAlert(errorMessage, status) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })
            Toast.fire({
            icon: `${status}`,
            title: `${errorMessage}`
            })
    }



})