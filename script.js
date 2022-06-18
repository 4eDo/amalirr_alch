function showMe(id, type) {
  switch(type){
    case "base":
      document.getElementById(id + "-base").style.display="block";
      document.getElementById(id + "-type1").style.display="none";
      document.getElementById(id + "-type2").style.display="none";
      document.getElementById(id + "-type3").style.display="none";
      document.getElementById(id + "-base-but").classList.add("checked_ingr");
      document.getElementById(id + "-type1-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type2-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type3-but").classList.remove("checked_ingr");
      break;
    case "type1":
      document.getElementById(id + "-base").style.display="none";
      document.getElementById(id + "-type1").style.display="block";
      document.getElementById(id + "-type2").style.display="none";
      document.getElementById(id + "-type3").style.display="none";
      document.getElementById(id + "-base-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type1-but").classList.add("checked_ingr");
      document.getElementById(id + "-type2-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type3-but").classList.remove("checked_ingr");
      break;
    case "type2":
      document.getElementById(id + "-base").style.display="none";
      document.getElementById(id + "-type1").style.display="none";
      document.getElementById(id + "-type2").style.display="block";
      document.getElementById(id + "-type3").style.display="none";
      document.getElementById(id + "-base-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type1-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type2-but").classList.add("checked_ingr");
      document.getElementById(id + "-type3-but").classList.remove("checked_ingr");
      break;
    case "type3":
      document.getElementById(id + "-base").style.display="none";
      document.getElementById(id + "-type1").style.display="none";
      document.getElementById(id + "-type2").style.display="none";
      document.getElementById(id + "-type3").style.display="block";
      document.getElementById(id + "-base-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type1-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type2-but").classList.remove("checked_ingr");
      document.getElementById(id + "-type3-but").classList.add("checked_ingr");
      break;
  }
}

function dropMe(id, type, name) {
  var myHtmlContent = '<td>'+name+'</td>';
  document.getElementById('secret_textarea').value += id + "-" + type +"|";
  var tableRef = document.getElementById('ingr_in_boiler').getElementsByTagName('tbody')[0];

  var newRow = tableRef.insertRow(tableRef.rows.length);
  newRow.innerHTML = myHtmlContent;
}

function transformMe(id, type) {
  // TODO
}
