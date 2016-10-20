import React, { PropTypes } from 'react';
import $ from 'jquery';

export default class Menu extends React.Component {

    render() {
        return (
            <nav className="navbar navbar-inverse navbar-fixed-top">
                <div className="container">
                    <div className="navbar-header">
                        <button type="button" className="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i className="fa fa-bars"></i>
                        </button>
                        <a className="navbar-brand" href="/">
                            <img className="img-responsive brand" src="http://localhost:8080/assets/build/img/HSK-logo.png"/>
                        </a>
                        <a href="#"><div id="search-box-mobile" className="hidden-lg hidden-md hidden-sm pull-right">
                            <div className="input-group">
                                <input type="text" className="form-control" placeholder="Search for..."/>
                                            <span className="input-group-btn">
                                                <button className="btn btn-default" type="button">
                                                    <i className="fa fa-search"/></button>
                                            </span>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul className="nav navbar-nav pull-right">
                            <li>
                                <a>
                                    <div id="search-box" className="hidden-xs">
                                        <div className="input-group">
                                            <input type="text" className="form-control" placeholder="Search for..."/>
                                        <span className="input-group-btn">
                                            <button className="btn btn-default" type="button"><i className="fa fa-search"/></button>
                                        </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#"><i className="fa fa-cart"/>Cart</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        );
    }
}
