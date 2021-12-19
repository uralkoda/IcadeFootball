import './styles/dashboard.css';
require('select2')

console.log('dashboard');
import $ from 'jquery';
global.$ = $;
console.log('dashboard1');

$(document).ready(function() {
    'use strict';
    console.log(AUTO_COMPLETE_DATA);
    $('.js-example-basic-single').select2({
        width: '100%',
        allowClear: true,
        multiple: true,
        maximumSelectionSize: 1,
        minimumInputLength: 3,
        placeholder: 'Search',
        data: AUTO_COMPLETE_DATA,
        templateResult: formatMatch
    });
    function formatMatch (match) {
        if (!match.fixtureId) {
            return match.leagueName;
        }
        var href = "/football/" + match.fixtureId  + "?homeid=" + match.teamsHomeId + "&awayid=" + match.teamsAwayId ;
        var $match = $(
            '<div className="card w-100">' +
                '<div className="card-body ">' +
                     '<span >' +
                     '<img src="' + match.leagueLogo + '" class="img-flag" /> '
                     + match.leagueName +
                     '</span>' +
                     '<h5 className="card-title ">' + match.text +
                     '<h5/>' +
                    '<a href="' + href +  '" className="btn btn-primary ">visit statics</a>' +
                '</div>' +
            '</div>'
        );
        return $match;
    };

})