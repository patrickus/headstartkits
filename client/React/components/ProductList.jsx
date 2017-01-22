import React, { PropTypes } from 'react';
import Product from '../components/Product';
import ProductItem from '../components/ProductItem';
import { Link } from 'react-router';
import _ from 'lodash';
import $ from 'jquery';
//window.$ = window.jQuery = require('jquery');


export default class ProductList extends React.Component {

    constructor(props, context) {
        super(props, context);
        this.state = {
            products: this.props,
            filterText: ''
        };
    }

    onChangeSearch() {
        this.setState({filterText: this.filterTextInput.value});
    }

    testJquery() {
        $('#product').addClass('danger');
    }

    render() {
        let products = [];
        let itemKeys = Object.keys(this.props);
        products = itemKeys.map((key, idx)  => {
            return (
                <div key={key}>
                    <ProductItem product={this.props[key]} />
                </div>
            );
        });

        return (
            <div onClick={this.testJquery} id="product">
                {products}
            </div>
        );
    }
}
