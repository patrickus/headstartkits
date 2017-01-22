import React, { PropTypes } from 'react';

export default class CategoryList extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        let itemKeys = Object.keys(this.props),
            products = itemKeys.map((key, item)  => {
            return (
                <a className="btn btn-primary green-btn" key={key}>
                    {this.props[key].name}
                </a>
            );
        });

        return (
            <div className="col-xs-12 bottom-buffer category-list text-center">
                {products}
            </div>
        );
    }
}
