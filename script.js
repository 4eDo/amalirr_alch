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

function dropMe(id, type, name, phys, magic, holy, def, atc) {
  var myHtmlContent = '<td>'+name+'</td>';
   if(document.getElementById('secret_textarea').value.length < 1) {
     document.getElementById('secret_textarea').value += id + "-" + type;
   } else {
     document.getElementById('secret_textarea').value += "|" + id + "-" + type;
   }
  var tableRef = document.getElementById('ingr_in_boiler').getElementsByTagName('tbody')[0];

  var newRow = tableRef.insertRow(tableRef.rows.length);
  newRow.innerHTML = myHtmlContent;
  updBoilerParams('phys', phys);
  updBoilerParams('magic', magic);
  updBoilerParams('holy', holy);
  updBoilerParams('def', def);
  updBoilerParams('atc', atc);
  document.getElementById("count_").innerText =  parseInt(document.getElementById("count_" + id).innerText, 10) - 1;
}

function transformMe(id, type) {
  // TODO
}

function updBoilerParams(type, addValue) {
	var textareaId = "boiler_" + type + "_str";
	var barId = "boiler_" + type;
	var existStr = document.getElementById(textareaId).value;
	var newStr = "";
	var count = 0;
	var sum = 0;
	if(existStr.length < 1) {
		newStr = addValue;
    count = 1;
    sum = addValue;
	} else {
		newStr = existStr + " " + addValue;
    var values = newStr.split(' ');
	values.forEach(element => {
		count++;
		sum += parseInt(element, 10);
	});
	}
   document.getElementById(textareaId).value = newStr;
	
	document.getElementById(barId).style.width = sum/count + "%";
}
