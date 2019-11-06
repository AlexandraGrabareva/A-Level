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


table.onmouseover = function(event) {
  let target = event.target;
  target.style.background = 'pink';
};

table.onmouseout = function(event) {
  let target = event.target;
  target.style.background = '';
};