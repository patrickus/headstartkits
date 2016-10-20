import React, { PropTypes } from 'react';

export default class HeaderProduct extends React.Component {

    render() {
        var imgsrc = 'https://newleafwellness.biz/wp-content/uploads/2013/09/Homemade-Coconut-Oil-Sugar-Scrub-with-Grapefruit1-1024x768.jpg';
        return (
            <div className="col-xs-4">
                <img src={imgsrc} className="img-responsive"/>
                <h4>Product 1 <div className="pull-right">3.<sup>95</sup></div></h4>
            </div>
        );
    }
}
