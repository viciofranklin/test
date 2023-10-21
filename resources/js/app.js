import './bootstrap';
import { fetchBeer } from './components/fetch';

window.fetchBeer = fetchBeer;
window.addEventListener('DOMContentLoaded', fetchBeer);