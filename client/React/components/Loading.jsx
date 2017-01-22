import React, { PropTypes } from 'react';

export default class CategoryList extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div className="col-xs-12 bottom-buffer">
                <div class="text-center">
                    <i style="animation: spin 4s linear infinite; margin-right:10px;" class="fa fa-circle-o-notch" aria-hidden="true"></i>
                    <i style="animation: spin 4s linear infinite; margin-right:10px;" class="fa fa-circle-o-notch" aria-hidden="true"></i>
                    <i style="animation: spin 4s linear infinite;" class="fa fa-circle-o-notch" aria-hidden="true"></i>
                </div>
            </div>
        );
    }
}
