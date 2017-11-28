<script>
    var url = document.location;
    $(document).ready(function(){
        if (url !== "{{url('')}}") {
            content(url);
        }
    });
    window.onpopstate = function() {
        content(url);
    };

    var content = function(url){
        $.get(url + '/content')
            .then(function (response) {
                // localStorage.setItem(url, JSON.stringify(response));
                $('#halaman').html(response.page)
            }, function (err) {
                var response = JSON.parse(err.responseText);
                if (response.status == 404) {
                    $('#halaman').html(response.page)
                }
            })
            .always(function () {
                console.log('success');
            });
    }

    var urlchange = function(urllink){
        if (typeof urllink !== 'undefined' && urllink !== '#')
        {
            history.pushState({}, '', urllink);
            window.dispatchEvent(new Event('popstate'));
            content(urllink);
        }
    }

    $(document).on('click','a.load-view',function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        urlchange(url);
    });
    
</script>
