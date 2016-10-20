import React, { PropTypes } from 'react';
import Product from '../components/Product';
import HeaderProduct from '../components/HeaderProduct';
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



    render() {
        let products = [];
        let itemKeys = Object.keys(this.props);
        /*for (let key in itemKeys) {
            products =  <HeaderProduct product={this.props[key]} />
        }*/
        //console.log(products);
        products = itemKeys.map((key, idx)  => {
            return (
                <div key={key}>
                    <HeaderProduct product={this.props[key]} />
                </div>
            );
        });
        //$('.testthing').addClass('danger');
        return (
            <div id="testthing">
                {products}
            </div>
        );
    }
}
