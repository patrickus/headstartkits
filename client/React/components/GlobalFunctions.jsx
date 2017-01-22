import React from 'react';
import ReactDOM from 'react-dom';

export default () => {
    console.log('here');

    $(window).on('load', function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
};
