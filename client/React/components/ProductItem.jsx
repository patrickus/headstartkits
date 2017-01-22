import React, { PropTypes } from 'react';

export default class ProductItem extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        var imgSrc = 'http://freewebsitepics.staging.labeffect.com/wp-content/uploads/photo-gallery/thumb/IMG_7020.jpg';
        this.props.product.image ? imgSrc = this.props.product.image : null;
        return (
            <div id="header-product" className="col-md-3 col-sm-4 col-xs-6">
                <img src={imgSrc} className="img-responsive product-image"/>
                <h4>{this.props.product.name}
                    <div className="pull-right"
                         dangerouslySetInnerHTML={{__html: this.props.product.price}}>
                    </div>
                </h4>
                <div className="description">
                    <div className="row">
                        <div className="col-md-10">
                            {this.props.product.description}
                        </div>
                        <div className="col-md-2">
                            <a className="btn btn-primary pull-right green-btn"
                               data-toggle="tooltip" title="Add to Cart">
                                <i className="fa fa-shopping-cart"/>
                            </a>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        );
    }
}
