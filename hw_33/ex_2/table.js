const table = document.createElement('table');

for (let i = 0; i < 10; i++){
  const row = document.createElement('tr');
  for (let j = 0; j < 10; j++){
    const col = document.createElement('td');
    let val = i * j;
    if (val === 0) {
      val = i || j;
    }
    col.innerHTML = val;
    row.appendChild(col);
  }
  table.appendChild(row);
}

document.body.appendChild(table);



const setColorRowColumn = function(event, color) {
  const target = event.target;
  if (target.tagName === 'TD') {
    target.style.background = color;
    //задаем фон родительскому элементу, т.е. строке, в которой находится ячейка
    target.parentNode.style.background = color;
    //получаем индекс ячейки в строке
    const index = event.srcElement.cellIndex;
    //задаем фон всем ячейкам с таким же индексом
    const rows = document.querySelectorAll('tr');
    rows.forEach(function(row) {
      row.childNodes[index].style.background = color;
    });
  }
}

table.onmouseover = function(event) {
  setColorRowColumn(event, 'pink');
} 
table.onmouseout = function(event) {
  setColorRowColumn(event, '');
}