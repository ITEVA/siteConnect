/**
 * Created by mc80 on 03/12/15.
 */
$(document).ready(function(){
    $('div.slider').cycle({
        timeout : 2000,
        fx : 'fade',
        pager : $('.pager'),
        pagerAnchorBuilder : function(index, DOMelement ){
            return '<div><a></a></div>'
        },
        activePagerClass:'ativo'
    });
});