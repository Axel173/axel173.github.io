document.addEventListener('DOMContentLoaded', function () {
    M.AutoInit();

    M.Tabs.init('.tabs', {

    });

    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
        constrainWidth: false
    });

    var timeoutID = 0;

    var instance = M.Carousel.init(document.querySelectorAll('.carousel'), {
        dist: 0,
        padding: 0,
        fullWidth: true,
        indicators: true,
        noWrap: false,
        duration: 200,
        numVisible: 1,
        shift: 0,
        onCycleTo: function () {
            if(timeoutID != 0)
            {
                clearTimeout(timeoutID);
                timeoutID = setTimeout(autoplay, 4500);

            } else {
                timeoutID = setTimeout(autoplay, 4500);
            }


        }
    });


    function autoplay() {
        instanceee = M.Carousel.getInstance(document.querySelectorAll('.carousel')[0]);

        instanceee.next();
        timeoutID = setTimeout(autoplay, 4500);
    }

    var elems = document.querySelectorAll('.fixed-action-btn');

    var instances = M.FloatingActionButton.init(elems, {
        /*toolbarEnabled: true,*/
        hoverEnabled: false
    });

});