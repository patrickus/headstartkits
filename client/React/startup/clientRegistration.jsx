import ReactOnRails from 'react-on-rails';
import AppClient from './AppClient';
import Menu from '../components/Menu';
import HeaderProduct from '../components/HeaderProduct';
import Product from '../components/Product';
import ProductList from '../components/ProductList';

ReactOnRails.register({ Menu });
ReactOnRails.register({ HeaderProduct });
ReactOnRails.register({ ProductList });
ReactOnRails.register({ Product });