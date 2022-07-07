const sparklineLogin = function () {

    $('#sparkline2dash').sparkline([6, 10, 9, 11, 9, 10, 12], {
        type: 'bar',
        height: '154',
        barWidth: '4',
        resize: true,
        barSpacing: '10',
        barColor: '#25a6f7'
    });
    $('#sales1').sparkline([6, 10, 9, 11, 9, 10, 12], {
        type: 'bar',
        height: '154',
        barWidth: '4',
        resize: true,
        barSpacing: '10',
        barColor: '#fff'
    });

};
var sparkResize;

$(window).resize(function (e) {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(sparklineLogin, 500);
});
sparklineLogin();

