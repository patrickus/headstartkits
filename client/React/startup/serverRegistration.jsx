import ReactOnRails from 'react-on-rails';
import GlobalFunctions from '../components/GlobalFunctions';
import Menu from '../components/Menu';
import ProductItem from '../components/ProductItem';
import Product from '../components/Product';
import ProductList from '../components/ProductList';
import CategoryList from '../components/CategoryList';
import Loading from '../components/Loading';

ReactOnRails.register({ GlobalFunctions });
ReactOnRails.register({ Menu });
ReactOnRails.register({ ProductItem });
ReactOnRails.register({ Product });
ReactOnRails.register({ ProductList });
ReactOnRails.register({ CategoryList });
ReactOnRails.register({ Loading });

