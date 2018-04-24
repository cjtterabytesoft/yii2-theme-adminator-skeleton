/**
* This file is part of the CJTTERABYTESOFT yii2-theme-adminator-skeleton
*
* (c) CJT TERABYTE LLC yii2-theme-adminator-skeleton
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
*      @link: https://github.com/cjtterabytesoft/yii2-theme-adminator-skeleton
*    @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
* @copyright: (c) CJT TERABYTE LLC
*     @theme: [yii2-theme-adminator-skeleton]
*        @js: [Adminator]
*     @since: 1.0
**/

/***********************************************************************************************************************
* Constant - Setup
***********************************************************************************************************************/

const COLORS = {
    'white'                 : '#ffffff',
    'red-50'                : '#ffebee',
    'red-100'               : '#ffcdd2',
    'red-200'               : '#ef9a9a',
    'red-300'               : '#e57373',
    'red-400'               : '#ef5350',
    'red-500'               : '#f44336',
    'red-600'               : '#e53935',
    'red-700'               : '#d32f2f',
    'red-800'               : '#c62828',
    'red-900'               : '#b71c1c',
    'red-a100'              : '#ff8a80',
    'red-a200'              : '#ff5252',
    'red-a400'              : '#ff1744',
    'red-a700'              : '#d50000',
    'pink-50'               : '#fce4ec',
    'pink-100'              : '#f8bbd0',
    'pink-200'              : '#f48fb1',
    'pink-300'              : '#f06292',
    'pink-400'              : '#ec407a',
    'pink-500'              : '#e91e63',
    'pink-600'              : '#d81b60',
    'pink-700'              : '#c2185b',
    'pink-800'              : '#ad1457',
    'pink-900'              : '#880e4f',
    'pink-a100'             : '#ff80ab',
    'pink-a200'             : '#ff4081',
    'pink-a400'             : '#f50057',
    'pink-a700'             : '#c51162',
    'purple-50'             : '#f3e5f5',
    'purple-100'            : '#e1bee7',
    'purple-200'            : '#ce93d8',
    'purple-300'            : '#ba68c8',
    'purple-400'            : '#ab47bc',
    'purple-500'            : '#9c27b0',
    'purple-600'            : '#8e24aa',
    'purple-700'            : '#7b1fa2',
    'purple-800'            : '#6a1b9a',
    'purple-900'            : '#4a148c',
    'purple-a100'           : '#ea80fc',
    'purple-a200'           : '#e040fb',
    'purple-a400'           : '#d500f9',
    'purple-a700'           : '#aa00ff',
    'deep-purple-50'        : '#ede7f6',
    'deep-purple-100'       : '#d1c4e9',
    'deep-purple-200'       : '#b39ddb',
    'deep-purple-300'       : '#9575cd',
    'deep-purple-400'       : '#7e57c2',
    'deep-purple-500'       : '#673ab7',
    'deep-purple-600'       : '#5e35b1',
    'deep-purple-700'       : '#512da8',
    'deep-purple-800'       : '#4527a0',
    'deep-purple-900'       : '#311b92',
    'deep-purple-a100'      : '#b388ff',
    'deep-purple-a200'      : '#7c4dff',
    'deep-purple-a400'      : '#651fff',
    'deep-purple-a700'      : '#6200ea',
    'indigo-50'             : '#e8eaf6',
    'indigo-100'            : '#c5cae9',
    'indigo-200'            : '#9fa8da',
    'indigo-300'            : '#7986cb',
    'indigo-400'            : '#5c6bc0',
    'indigo-500'            : '#3f51b5',
    'indigo-600'            : '#3949ab',
    'indigo-700'            : '#303f9f',
    'indigo-800'            : '#283593',
    'indigo-900'            : '#1a237e',
    'indigo-a100'           : '#8c9eff',
    'indigo-a200'           : '#536dfe',
    'indigo-a400'           : '#3d5afe',
    'indigo-a700'           : '#304ffe',
    'blue-50'               : '#e3f2fd',
    'blue-100'              : '#bbdefb',
    'blue-200'              : '#90caf9',
    'blue-300'              : '#64b5f6',
    'blue-400'              : '#42a5f5',
    'blue-500'              : '#2196f3',
    'blue-600'              : '#1e88e5',
    'blue-700'              : '#1976d2',
    'blue-800'              : '#1565c0',
    'blue-900'              : '#0d47a1',
    'blue-a100'             : '#82b1ff',
    'blue-a200'             : '#448aff',
    'blue-a400'             : '#2979ff',
    'blue-a700'             : '#2962ff',
    'light-blue-50'         : '#e1f5fe',
    'light-blue-100'        : '#b3e5fc',
    'light-blue-200'        : '#81d4fa',
    'light-blue-300'        : '#4fc3f7',
    'light-blue-400'        : '#29b6f6',
    'light-blue-500'        : '#03a9f4',
    'light-blue-600'        : '#039be5',
    'light-blue-700'        : '#0288d1',
    'light-blue-800'        : '#0277bd',
    'light-blue-900'        : '#01579b',
    'light-blue-a100'       : '#80d8ff',
    'light-blue-a200'       : '#40c4ff',
    'light-blue-a400'       : '#00b0ff',
    'light-blue-a700'       : '#0091ea',
    'cyan-50'               : '#e0f7fa',
    'cyan-100'              : '#b2ebf2',
    'cyan-200'              : '#80deea',
    'cyan-300'              : '#4dd0e1',
    'cyan-400'              : '#26c6da',
    'cyan-500'              : '#00bcd4',
    'cyan-600'              : '#00acc1',
    'cyan-700'              : '#0097a7',
    'cyan-800'              : '#00838f',
    'cyan-900'              : '#006064',
    'cyan-a100'             : '#84ffff',
    'cyan-a200'             : '#18ffff',
    'cyan-a400'             : '#00e5ff',
    'cyan-a700'             : '#00b8d4',
    'teal-50'               : '#e0f2f1',
    'teal-100'              : '#b2dfdb',
    'teal-200'              : '#80cbc4',
    'teal-300'              : '#4db6ac',
    'teal-400'              : '#26a69a',
    'teal-500'              : '#009688',
    'teal-600'              : '#00897b',
    'teal-700'              : '#00796b',
    'teal-800'              : '#00695c',
    'teal-900'              : '#004d40',
    'teal-a100'             : '#a7ffeb',
    'teal-a200'             : '#64ffda',
    'teal-a400'             : '#1de9b6',
    'teal-a700'             : '#00bfa5',
    'green-50'              : '#e8f5e9',
    'green-100'             : '#c8e6c9',
    'green-200'             : '#a5d6a7',
    'green-300'             : '#81c784',
    'green-400'             : '#66bb6a',
    'green-500'             : '#4caf50',
    'green-600'             : '#43a047',
    'green-700'             : '#388e3c',
    'green-800'             : '#2e7d32',
    'green-900'             : '#1b5e20',
    'green-a100'            : '#b9f6ca',
    'green-a200'            : '#69f0ae',
    'green-a400'            : '#00e676',
    'green-a700'            : '#00c853',
    'light-green-50'        : '#f1f8e9',
    'light-green-100'       : '#dcedc8',
    'light-green-200'       : '#c5e1a5',
    'light-green-300'       : '#aed581',
    'light-green-400'       : '#9ccc65',
    'light-green-500'       : '#8bc34a',
    'light-green-600'       : '#7cb342',
    'light-green-700'       : '#689f38',
    'light-green-800'       : '#558b2f',
    'light-green-900'       : '#33691e',
    'light-green-a100'      : '#ccff90',
    'light-green-a200'      : '#b2ff59',
    'light-green-a400'      : '#76ff03',
    'light-green-a700'      : '#64dd17',
    'lime-50'               : '#f9fbe7',
    'lime-100'              : '#f0f4c3',
    'lime-200'              : '#e6ee9c',
    'lime-300'              : '#dce775',
    'lime-400'              : '#d4e157',
    'lime-500'              : '#cddc39',
    'lime-600'              : '#c0ca33',
    'lime-700'              : '#afb42b',
    'lime-800'              : '#9e9d24',
    'lime-900'              : '#827717',
    'lime-a100'             : '#f4ff81',
    'lime-a200'             : '#eeff41',
    'lime-a400'             : '#c6ff00',
    'lime-a700'             : '#aeea00',
    'yellow-50'             : '#fffde7',
    'yellow-100'            : '#fff9c4',
    'yellow-200'            : '#fff59d',
    'yellow-300'            : '#fff176',
    'yellow-400'            : '#ffee58',
    'yellow-500'            : '#ffeb3b',
    'yellow-600'            : '#fdd835',
    'yellow-700'            : '#fbc02d',
    'yellow-800'            : '#f9a825',
    'yellow-900'            : '#f57f17',
    'yellow-a100'           : '#ffff8d',
    'yellow-a200'           : '#ffff00',
    'yellow-a400'           : '#ffea00',
    'yellow-a700'           : '#ffd600',
    'amber-50'              : '#fff8e1',
    'amber-100'             : '#ffecb3',
    'amber-200'             : '#ffe082',
    'amber-300'             : '#ffd54f',
    'amber-400'             : '#ffca28',
    'amber-500'             : '#ffc107',
    'amber-600'             : '#ffb300',
    'amber-700'             : '#ffa000',
    'amber-800'             : '#ff8f00',
    'amber-900'             : '#ff6f00',
    'amber-a100'            : '#ffe57f',
    'amber-a200'            : '#ffd740',
    'amber-a400'            : '#ffc400',
    'amber-a700'            : '#ffab00',
    'orange-50'             : '#fff3e0',
    'orange-100'            : '#ffe0b2',
    'orange-200'            : '#ffcc80',
    'orange-300'            : '#ffb74d',
    'orange-400'            : '#ffa726',
    'orange-500'            : '#ff9800',
    'orange-600'            : '#fb8c00',
    'orange-700'            : '#f57c00',
    'orange-800'            : '#ef6c00',
    'orange-900'            : '#e65100',
    'orange-a100'           : '#ffd180',
    'orange-a200'           : '#ffab40',
    'orange-a400'           : '#ff9100',
    'orange-a700'           : '#ff6d00',
    'deep-orange-50'        : '#fbe9e7',
    'deep-orange-100'       : '#ffccbc',
    'deep-orange-200'       : '#ffab91',
    'deep-orange-300'       : '#ff8a65',
    'deep-orange-400'       : '#ff7043',
    'deep-orange-500'       : '#ff5722',
    'deep-orange-600'       : '#f4511e',
    'deep-orange-700'       : '#e64a19',
    'deep-orange-800'       : '#d84315',
    'deep-orange-900'       : '#bf360c',
    'deep-orange-a100'      : '#ff9e80',
    'deep-orange-a200'      : '#ff6e40',
    'deep-orange-a400'      : '#ff3d00',
    'deep-orange-a700'      : '#dd2c00',
    'brown-50'              : '#efebe9',
    'brown-100'             : '#d7ccc8',
    'brown-200'             : '#bcaaa4',
    'brown-300'             : '#a1887f',
    'brown-400'             : '#8d6e63',
    'brown-500'             : '#795548',
    'brown-600'             : '#6d4c41',
    'brown-700'             : '#5d4037',
    'brown-800'             : '#4e342e',
    'brown-900'             : '#3e2723',
    'grey-50'               : '#fafafa',
    'grey-100'              : '#f5f5f5',
    'grey-200'              : '#eeeeee',
    'grey-300'              : '#e0e0e0',
    'grey-400'              : '#bdbdbd',
    'grey-500'              : '#9e9e9e',
    'grey-600'              : '#757575',
    'grey-700'              : '#616161',
    'grey-800'              : '#424242',
    'grey-900'              : '#212121',
    'blue-grey-50'          : '#eceff1',
    'blue-grey-100'         : '#cfd8dc',
    'blue-grey-200'         : '#b0bec5',
    'blue-grey-300'         : '#90a4ae',
    'blue-grey-400'         : '#78909c',
    'blue-grey-500'         : '#607d8b',
    'blue-grey-600'         : '#546e7a',
    'blue-grey-700'         : '#455a64',
    'blue-grey-800'         : '#37474f',
    'blue-grey-900'         : '#263238',
};

const GREYS = {
    'grey-100' : '#f9fafb',
    'grey-200' : '#f2f3f5',
    'grey-300' : '#e6eaf0',
    'grey-400' : '#d3d9e3',
    'grey-500' : '#b9c2d0',
    'grey-600' : '#7c8695',
    'grey-700' : '#72777a',
    'grey-800' : '#565a5c',
    'grey-900' : '#313435',
};

/***********************************************************************************************************************
* Charts
***********************************************************************************************************************/

(function () {
    // ------------------------------------------------------
    // @Line Charts
    // ------------------------------------------------------

    const lineChartBox = document.getElementById('line-chart');

    if (lineChartBox) {
        const lineCtx = lineChartBox.getContext('2d');
        lineChartBox.height = 80;

        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label                : 'Series A',
                    backgroundColor      : 'rgba(237, 231, 246, 0.5)',
                    borderColor          : COLORS['deep-purple-500'],
                    pointBackgroundColor : COLORS['deep-purple-700'],
                    borderWidth          : 2,
                    data                 : [60, 50, 70, 60, 50, 70, 60],
                }, {
                    label                : 'Series B',
                    backgroundColor      : 'rgba(232, 245, 233, 0.5)',
                    borderColor          : COLORS['blue-500'],
                    pointBackgroundColor : COLORS['blue-700'],
                    borderWidth          : 2,
                    data                 : [70, 75, 85, 70, 75, 85, 70],
                }],
            },

            options: {
                legend: {
                    display: false,
                },
            },

        });
    }

    // ------------------------------------------------------
    // @Bar Charts
    // ------------------------------------------------------

    const barChartBox = document.getElementById('bar-chart');

    if (barChartBox) {
        const barCtx = barChartBox.getContext('2d');

        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label           : 'Dataset 1',
                    backgroundColor : COLORS['deep-purple-500'],
                    borderColor     : COLORS['deep-purple-800'],
                    borderWidth     : 1,
                    data            : [10, 50, 20, 40, 60, 30, 70],
                }, {
                    label           : 'Dataset 2',
                    backgroundColor : COLORS['light-blue-500'],
                    borderColor     : COLORS['light-blue-800'],
                    borderWidth     : 1,
                    data            : [10, 50, 20, 40, 60, 30, 70],
                }],
            },

            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                },
            },
        });
    }

    // ------------------------------------------------------
    // @Area Charts
    // ------------------------------------------------------

    const areaChartBox = document.getElementById('area-chart');

    if (areaChartBox) {
        const areaCtx = areaChartBox.getContext('2d');

        new Chart(areaCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    backgroundColor : 'rgba(3, 169, 244, 0.5)',
                    borderColor     : COLORS['light-blue-800'],
                    data            : [10, 50, 20, 40, 60, 30, 70],
                    label           : 'Dataset',
                    fill            : 'start',
                }],
            },
        });
    }

    // ------------------------------------------------------
    // @Scatter Charts
    // ------------------------------------------------------

    const scatterChartBox = document.getElementById('scatter-chart');

    if (scatterChartBox) {
        const scatterCtx = scatterChartBox.getContext('2d');

        Chart.Scatter(scatterCtx, {
            data: {
                datasets: [{
                    label           : 'My First dataset',
                    borderColor     : COLORS['red-500'],
                    backgroundColor : COLORS['red-500'],
                    data: [
                        { x: 10, y: 20 },
                        { x: 30, y: 40 },
                        { x: 50, y: 60 },
                        { x: 70, y: 80 },
                        { x: 90, y: 100 },
                        { x: 110, y: 120 },
                        { x: 130, y: 140 },
                    ],
                }, {
                    label           : 'My Second dataset',
                    borderColor     : COLORS['green-500'],
                    backgroundColor : COLORS['green-500'],
                    data: [
                        { x: 150, y: 160 },
                        { x: 170, y: 180 },
                        { x: 190, y: 200 },
                        { x: 210, y: 220 },
                        { x: 230, y: 240 },
                        { x: 250, y: 260 },
                        { x: 270, y: 280 },
                    ],
                }],
            },
        });
    }
}());

/***********************************************************************************************************************
* Chat
***********************************************************************************************************************/

(function () {
    $('#chat-sidebar-toggle').on('click', e => {
        $('#chat-sidebar').toggleClass('open');
    e.preventDefault();
});
}());

/***********************************************************************************************************************
* Datatables
***********************************************************************************************************************/

(function () {
    $('#dataTable').DataTable();
}());

/***********************************************************************************************************************
* EasyPieChart
***********************************************************************************************************************/

(function () {
    if ($('.easy-pie-chart').length > 0) {
        $('.easy-pie-chart').easyPieChart({
            onStep(from, to, percent) {
                this.el.children[0].innerHTML = `${Math.round(percent)} %`;
            },
        });
    }
}());

/***********************************************************************************************************************
* Email
***********************************************************************************************************************/

(function () {
    $('.email-side-toggle').on('click', e => {
        $('.email-app').toggleClass('side-active');
    e.preventDefault();
});

    $('.email-list-item, .back-to-mailbox').on('click', e => {
        $('.email-content').toggleClass('open');
    e.preventDefault();
});
}());

/***********************************************************************************************************************
* Full Calendar
***********************************************************************************************************************/

(function () {
    const date = new Date();
    const d    = date.getDate();
    const m    = date.getMonth();
    const y    = date.getFullYear();

    const events = [{
        title  : 'All Day Event',
        start  : new Date(y, m, 1),
        desc   : 'Meetings',
        bullet : 'success',
    }, {
        title  : 'Long Event',
        start  : new Date(y, m, d - 5),
        end    : new Date(y, m, d - 2),
        desc   : 'Hangouts',
        bullet : 'success',
    }, {
        title  : 'Repeating Event',
        start  : new Date(y, m, d - 3, 16, 0),
        allDay : false,
        desc   : 'Product Checkup',
        bullet : 'warning',
    }, {
        title  : 'Repeating Event',
        start  : new Date(y, m, d + 4, 16, 0),
        allDay : false,
        desc   : 'Conference',
        bullet : 'danger',
    }, {
        title  : 'Birthday Party',
        start  : new Date(y, m, d + 1, 19, 0),
        end    : new Date(y, m, d + 1, 22, 30),
        allDay : false,
        desc   : 'Gathering',
    }, {
        title  : 'Click for Google',
        start  : new Date(y, m, 28),
        end    : new Date(y, m, 29),
        url    : 'http ://google.com/',
        desc   : 'Google',
        bullet : 'success',
    }];

    $('#full-calendar').fullCalendar({
        events,
        height   : 800,
        editable : true,
        header: {
            left   : 'month,agendaWeek,agendaDay',
            center : 'title',
            right  : 'today prev,next',
        },
    });
}());

/***********************************************************************************************************************
* Google Maps
***********************************************************************************************************************/

(function () {
    if ($('#google-map').length > 0) {
        loadGoogleMapsAPI({
            key: 'AIzaSyDW8td30_gj6sGXjiMU0ALeMu1SDEwUnEA',
        }).then(() => {
            const latitude  = 26.8206;
        const longitude = 30.8025;
        const mapZoom   = 5;
        const { google }    = window;

        const mapOptions = {
            center    : new google.maps.LatLng(latitude, longitude),
            zoom      : mapZoom,
            mapTypeId : google.maps.MapTypeId.ROADMAP,
            styles: [{
                'featureType': 'landscape',
                'stylers': [
                    { 'hue'        : '#FFBB00' },
                    { 'saturation' : 43.400000000000006 },
                    { 'lightness'  : 37.599999999999994 },
                    { 'gamma'      : 1 },
                ],
            }, {
                'featureType': 'road.highway',
                'stylers': [
                    { 'hue'        : '#FFC200' },
                    { 'saturation' : -61.8 },
                    { 'lightness'  : 45.599999999999994 },
                    { 'gamma'      : 1 },
                ],
            }, {
                'featureType': 'road.arterial',
                'stylers': [
                    { 'hue'        : '#FF0300' },
                    { 'saturation' : -100 },
                    { 'lightness'  : 51.19999999999999 },
                    { 'gamma'      : 1 },
                ],
            }, {
                'featureType': 'road.local',
                'stylers': [
                    { 'hue'        : '#FF0300' },
                    { 'saturation' : -100 },
                    { 'lightness'  : 52 },
                    { 'gamma'      : 1 },
                ],
            }, {
                'featureType': 'water',
                'stylers': [
                    { 'hue'        : '#0078FF' },
                    { 'saturation' : -13.200000000000003 },
                    { 'lightness'  : 2.4000000000000057 },
                    { 'gamma'      : 1 },
                ],
            }, {
                'featureType': 'poi',
                'stylers': [
                    { 'hue'        : '#00FF6A' },
                    { 'saturation' : -1.0989010989011234 },
                    { 'lightness'  : 11.200000000000017 },
                    { 'gamma'      : 1 },
                ],
            }],
        };

        const map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

        new google.maps.Marker({
            map,
            position : new google.maps.LatLng(latitude, longitude),
            visible  : true,
        });
    });
    }
}());

/***********************************************************************************************************************
* Mansory
***********************************************************************************************************************/

(function () {
    window.addEventListener('load', () => {
        if ($('.masonry').length > 0) {
        new Masonry('.masonry', {
            itemSelector: '.masonry-item',
            columnWidth: '.masonry-sizer',
            percentPosition: true,
        });
    }
});
}());

/***********************************************************************************************************************
* Popover
***********************************************************************************************************************/

(function () {
    // ------------------------------------------------------
    // @Popover
    // ------------------------------------------------------

    $('[data-toggle="popover"]').popover();

    // ------------------------------------------------------
    // @Tooltips
    // ------------------------------------------------------

    $('[data-toggle="tooltip"]').tooltip();
}());

/***********************************************************************************************************************
* Search Toggle
***********************************************************************************************************************/

(function () {
    $('.search-toggle').on('click', e => {
        $('.search-box, .search-input').toggleClass('active');
    $('.search-input input').focus();
    e.preventDefault();
});
}());

/***********************************************************************************************************************
* Sidebar Links
***********************************************************************************************************************/
(function () {
    $('.sidebar .sidebar-menu li a').on('click', function () {
        const $this = $(this);
        if ($this.parent().hasClass('open')) {
            $this
                .parent()
                .children('.dropdown-menu')
                .slideUp(200, () => {
                $this.parent().removeClass('open');
        });
        } else {
            $this
                .parent()
                .parent()
                .children('li.open')
                .children('.dropdown-menu')
                .slideUp(200);
            $this
                .parent()
                .parent()
                .children('li.open')
                .children('a')
                .removeClass('open');
            $this
                .parent()
                .parent()
                .children('li.open')
                .removeClass('open');
            $this
                .parent()
                .children('.dropdown-menu')
                .slideDown(200, () => {
                $this.parent().addClass('open');
        });
        }
    });

    /**
     * Sidebar Activity Class
     **/
    const sidebarLinks = $('.sidebar').find('.sidebar-link');
    sidebarLinks
        .each((index, el) => {
        $(el).removeClass('active');
})
.filter(function () {
        const href = $(this).attr('href');
        const pattern = href[0] === '/' ? href.substr(1) : href;
        return pattern === (window.location.pathname).substr(1);
    })
        .addClass('active');

    /**
     * Sidebar Toggle
     **/
    $('.sidebar-toggle').on('click', e => {
        $('.app').toggleClass('is-collapsed');
    e.preventDefault();
});

    /**
     * Wait untill sidebar fully toggled (animated in/out)
     * then trigger window resize event in order to recalculate
     * masonry layout widths and gutters.
     */
    $('#sidebar-toggle').click(e => {
        e.preventDefault();
    setTimeout(() => {
        window.dispatchEvent(window.EVENT);
}, 300);
});
}());

/***********************************************************************************************************************
* Sparklines
***********************************************************************************************************************/

(function () {
    // ------------------------------------------------------
    // @Dashboard Sparklines
    // ------------------------------------------------------

    var myvalues_1, myvalues_2, myvalues_3, myvalues_4;

    const drawSparklines = () => {
        if ($('#sparklinedash').length > 0) {
            $('#sparklinedash').sparkline(myvalues_1, {
                type: 'bar',
                height: '20',
                barWidth: '3',
                resize: true,
                barSpacing: '3',
                barColor: '#4caf50',
            });
        }

        if ($('#sparklinedash2').length > 0) {
            $('#sparklinedash2').sparkline(myvalues_2, {
                type: 'bar',
                height: '20',
                barWidth: '3',
                resize: true,
                barSpacing: '3',
                barColor: '#9675ce',
            });
        }

        if ($('#sparklinedash3').length > 0) {
            $('#sparklinedash3').sparkline(myvalues_3, {
                type: 'bar',
                height: '20',
                barWidth: '3',
                resize: true,
                barSpacing: '3',
                barColor: '#03a9f3',
            });
        }

        if ($('#sparklinedash4').length > 0) {
            $('#sparklinedash4').sparkline(myvalues_4, {
                type: 'bar',
                height: '20',
                barWidth: '3',
                resize: true,
                barSpacing: '3',
                barColor: '#f96262',
            });
        }
    };

    drawSparklines();

    // Redraw sparklines on resize
    $(window).resize(_.debounce(drawSparklines, 150));

    // ------------------------------------------------------
    // @Other Sparklines
    // ------------------------------------------------------

    $('#sparkline').sparkline(
        [5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7],
        {
            type: 'line',
            resize: true,
            height: '20',
        }
    );

    $('#compositebar').sparkline(
        'html',
        {
            type: 'bar',
            resize: true,
            barColor: '#aaf',
            height: '20',
        }
    );

    $('#compositebar').sparkline(
        [4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {
            composite: true,
            fillColor: false,
            lineColor: 'red',
            resize: true,
            height: '20',
        }
    );

    $('#normalline').sparkline(
        'html',
        {
            fillColor: false,
            normalRangeMin: -1,
            resize: true,
            normalRangeMax: 8,
            height: '20',
        }
    );

    $('.sparktristate').sparkline(
        'html',
        {
            type: 'tristate',
            resize: true,
            height: '20',
        }
    );

    $('.sparktristatecols').sparkline(
        'html',
        {
            type: 'tristate',
            colorMap: {
                '-2': '#fa7',
                resize: true,
                '2': '#44f',
                height: '20',
            },
        }
    );

    const values    = [5, 4, 5, -2, 0, 3, -5, 6, 7, 9, 9, 5, -3, -2, 2, -4];
    const valuesAlt = [1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1];

    $('.sparkline').sparkline(values, {
        type: 'line',
        barWidth: 4,
        barSpacing: 5,
        fillColor: '',
        lineColor: COLORS['red-500'],
        lineWidth: 2,
        spotRadius: 3,
        spotColor: COLORS['red-500'],
        maxSpotColor: COLORS['red-500'],
        minSpotColor: COLORS['red-500'],
        highlightSpotColor: COLORS['red-500'],
        highlightLineColor: '',
        tooltipSuffix: ' Bzzt',
        tooltipPrefix: 'Hello ',
        width: 100,
        height: undefined,
        barColor: '9f0',
        negBarColor: 'ff0',
        stackedBarColor: ['ff0', '9f0', '999', 'f60'],
        sliceColors: ['ff0', '9f0', '000', 'f60'],
        offset: '30',
        borderWidth: 1,
        borderColor: '000',
    });

    $('.sparkbar').sparkline(values, {
        type: 'bar',
        barWidth: 4,
        barSpacing: 1,
        fillColor: '',
        lineColor: COLORS['deep-purple-500'],
        tooltipSuffix: 'Celsius',
        width: 100,
        barColor: '39f',
        negBarColor: COLORS['deep-purple-500'],
        stackedBarColor: ['ff0', '9f0', '999', 'f60'],
        sliceColors: ['ff0', '9f0', '000', 'f60'],
        offset: '30',
        borderWidth: 1,
        borderColor: '000',
    });

    $('.sparktri').sparkline(valuesAlt, {
        type: 'tristate',
        barWidth: 4,
        barSpacing: 1,
        fillColor: '',
        lineColor: COLORS['light-blue-500'],
        tooltipSuffix: 'Celsius',
        width: 100,
        barColor: COLORS['light-blue-500'],
        posBarColor: COLORS['light-blue-500'],
        negBarColor: 'f90',
        zeroBarColor: '000',
        stackedBarColor: ['ff0', '9f0', '999', 'f60'],
        sliceColors: ['ff0', '9f0', '000', 'f60'],
        offset: '30',
        borderWidth: 1,
        borderColor: '000',
    });

    $('.sparkdisc').sparkline(values, {
        type: 'discrete',
        barWidth: 4,
        barSpacing: 5,
        fillColor: '',
        lineColor: '9f0',
        tooltipSuffix: 'Celsius',
        width: 100,
        barColor: '9f0',

        negBarColor: 'f90',

        stackedBarColor: ['ff0', '9f0', '999', 'f60'],
        sliceColors: ['ff0', '9f0', '000', 'f60'],
        offset: '30',
        borderWidth: 1,
        borderColor: '000',
    });

    $('.sparkbull').sparkline(values, {
        type: 'bullet',
        barWidth: 4,
        barSpacing: 5,
        fillColor: '',
        lineColor: COLORS['amber-500'],
        tooltipSuffix: 'Celsius',
        height: 'auto',
        width: 'auto',
        targetWidth: 'auto',
        barColor: COLORS['amber-500'],
        negBarColor: 'ff0',
        stackedBarColor: ['ff0', '9f0', '999', 'f60'],
        sliceColors: ['ff0', '9f0', '000', 'f60'],
        offset: '30',
        borderWidth: 1,
        borderColor: '000',
    });

    $('.sparkbox').sparkline(values, {
        type: 'box',
        barWidth: 4,
        barSpacing: 5,
        fillColor: '',
        lineColor: '9f0',
        tooltipSuffix: 'Celsius',
        width: 100,
        barColor: '9f0',
        negBarColor: 'ff0',
        stackedBarColor: ['ff0', '9f0', '999', 'f60'],
        sliceColors: ['ff0', '9f0', '000', 'f60'],
        offset: '30',
        borderWidth: 1,
        borderColor: '000',
    });
}());

/***********************************************************************************************************************
* Skycons
***********************************************************************************************************************/

(function () {
    const icons = new Skycons({ 'color': '#ff6849' });
    const list  = [
        'clear-day',
        'clear-night',
        'partly-cloudy-day',
        'partly-cloudy-night',
        'cloudy',
        'rain',
        'sleet',
        'snow',
        'wind',
        'fog',
    ];
    let i = list.length;

    while (i--) {
        const
            weatherType = list[i],
            elements    = document.getElementsByClassName(weatherType);
        let j = elements.length;

        while (j--) {
            icons.set(elements[j], weatherType);
        }
    }

    icons.play();
}());

/***********************************************************************************************************************
* Utils
***********************************************************************************************************************/

(function () {
    // ------------------------------------------------------
    // @Window Resize
    // ------------------------------------------------------

    /**
     * NOTE: Register resize event for Masonry layout
     */
    const EVENT = document.createEvent('UIEvents');
    window.EVENT = EVENT;
    EVENT.initUIEvent('resize', true, false, window, 0);


    window.addEventListener('load', () => {
        /**
         * Trigger window resize event after page load
         * for recalculation of masonry layout.
         */
        window.dispatchEvent(EVENT);
});

    // ------------------------------------------------------
    // @External Links
    // ------------------------------------------------------

    // Open external links in new window
    $('a')
        .filter('[href^="http"], [href^="//"]')
        .not(`[href*="${window.location.host}"]`)
        .attr('rel', 'noopener noreferrer')
        .attr('target', '_blank');

    // ------------------------------------------------------
    // @Resize Trigger
    // ------------------------------------------------------

    // Trigger resize on any element click
    document.addEventListener('click', () => {
        window.dispatchEvent(window.EVENT);
});
}());