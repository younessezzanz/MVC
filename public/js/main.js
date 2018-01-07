+function ($) { "use strict";

  $(function(){

  // datatable
  $('[data-ride="datatables"]').each(function() {
    var oTable = $(this).dataTable( {
      "bProcessing": true,
      "sAjaxSource": "js/datatables/datatable.json",
      "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
      "sPaginationType": "full_numbers",
      "aoColumns": [
        { "mData": "engine" },
        { "mData": "browser" },
        { "mData": "platform" },
        { "mData": "version" },
        { "mData": "grade" }
      ]
    } );
  });

  $('table#data').dataTable( {
    "aaSorting": [],
    "stateSave": true,
    "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
    "sPaginationType": "full_numbers",
  } );

  $('#growthrate').length && $.ajax('js/datatables/growthrate.csv').done(function(re){
    var data = $.csv.toArrays(re);
      $('#growthrate').html( '<table cellpadding="0" cellspacing="0" border="0" class="table table-striped m-b-none" id="example"></table>' );
      $('#example').dataTable( {
          "aaData": data,    
          "bProcessing": true,
          "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
          "iDisplayLength": 50,
          "sPaginationType": "full_numbers",
          "aoColumnDefs": [              
              { "bSearchable": false, "bVisible": false, "aTargets": [ 1 ] },
              { "bVisible": false, "aTargets": [ 4 ] },
              {
                  "mRender": function ( data, type, row ) {
                      return data +' '+ '%';
                  },
                  "aTargets": [ 5 ]
              },
              {
                  "mRender": function ( data, type, row ) {

                      return '<i class="fa '+ (row[5] > 0 ? 'fa-sort-up text-success' : 'fa-sort-down text-danger')+'"></i>';
                  },
                  'bSortable': false,
                  "aTargets": [ 6 ]
              },
          ],
          "aoColumns": [
              { "sTitle": "Country or Area" },
              { "sTitle": "Subgroup" },
              { "sTitle": "Year" },
              { "sTitle": "source", "sClass": "center" },
              { "sTitle": "Unit", "sClass": "center" },
              { "sTitle": "Value", "sClass": "center" },
              { "sTitle": "", "sClass": "center" }
          ]
      } );  
  }); 


  });
}(window.jQuery);


(function()
{
  var userNameField = document.querySelector('input[name=Username]');

  if(null !== userNameField) {
      userNameField.addEventListener('blur', function()
      {
          var req = new XMLHttpRequest();
          req.open('POST', 'http://www.mvcapp.com/users/checkuserexistsajax');
          req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

          req.onreadystatechange = function()
          {

              if(req.readyState == req.DONE && req.status == 200) {
                  if(req.response == 1) {
                     
                      if(userNameField.classList.contains("success")){
                        userNameField.classList.remove("success");
                        userNameField.classList.add("errors");
                      }else {
                        userNameField.classList.add("errors");
                      }

                  } else if(req.response == 2) {
                        if(userNameField.classList.contains("errors")){
                            userNameField.classList.remove("errors");
                            userNameField.classList.add("success");
                        }else {
                            userNameField.classList.add("success");
                        }  
                  }        
              }

              /*var iElem = document.createElement('i');
              if(req.readyState == req.DONE && req.status == 200) {
                  if(req.response == 1) {
                      iElem.className = 'fa fa-times error';
                  } else if(req.response == 2) {
                      iElem.className = 'fa fa-check success';
                  }
                  var iElems = userNameField.parentNode.childNodes;
                  for ( var i = 0, ii = iElems.length; i < ii; i++ )
                  {
                      if(iElems[i].nodeName.toLowerCase() == 'i') {
                          iElems[i].parentNode.removeChild(iElems[i]);
                      }
                  }
                  userNameField.parentNode.appendChild(iElem);            
              }*/
          }

          req.send("Username=" + this.value);
          
      }, false);

      
  }
})();