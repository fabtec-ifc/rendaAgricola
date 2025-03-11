import './bootstrap';
import 'remixicon/fonts/remixicon.css';
import Alpine from 'alpinejs';
import jQuery from 'jquery';
import jQValidation from 'jquery-validation';
import 'jquery-validation/dist/localization/messages_pt_BR';
import Chart from 'chart.js/auto';

window.Alpine = Alpine;
window.$ = jQuery;
window.validate = jQValidation;
window.Chart = Chart;

Alpine.start();

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
