import React, { PropTypes } from 'react';

export default class HeaderProduct extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        var imgSrc = 'http://freewebsitepics.staging.labeffect.com/wp-content/uploads/photo-gallery/thumb/IMG_7020.jpg';
        this.props.product.image ? imgSrc = this.props.product.image : null;
        return (
            <div className="col-md-4 col-xs-12">
                <img src={imgSrc} className="img-responsive"/>
                <h4>{this.props.product.name}
                    <div className="pull-right"
                         dangerouslySetInnerHTML={{__html: this.props.product.price}}>
                    </div>
                </h4>
                <span className="description">{this.props.product.description}</span>
            </div>
        );
    }
}
