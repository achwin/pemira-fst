let $ = require('jquery');
jQuery = $;
require('jquery-ui/datepicker');
require('./floatlabel.js');
require('./MoneyMask.js');
require('../lib/bootstrap/dist/js/bootstrap.js');

$(function(){
	$(".floatlabel").floatlabel();
	$(".datepicker").datepicker();
	$(".moneyMask").maskMoney();
})