document.addEventListener('DOMContentLoaded', function () {
    M.AutoInit();

    M.Tabs.init('.tabs', {

    });

    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
        constrainWidth: false
    });

    var instance = M.Carousel.init(document.querySelectorAll('.carousel'), {
        fullWidth: true,
        indicators: true,

        /*dist: 0,
        padding: 0,
        fullWidth: true,
        indicators: true,
        noWrap: false,
        duration: 200,
        numVisible: 1,
        shift: 0,*/
    });

    elems = document.querySelectorAll('.autocomplete');
    instances = M.Autocomplete.init(elems, {
        data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'https://placehold.it/250x250'
        },
        minLength: 3,
    });

    var elems = document.querySelectorAll('.action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        toolbarEnabled: true
    });
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems,
        {
            //edge: 'right'
        });

    var elems = document.querySelectorAll('.tap-target');
    var instances = M.TapTarget.init(elems, {

    });



    setTimeout(autoplay, 4500);

    function autoplay() {
        instanceee = M.Carousel.getInstance(document.querySelectorAll('.carousel')[0]);

        instanceee.next();
        setTimeout(autoplay, 4500);
    }
});