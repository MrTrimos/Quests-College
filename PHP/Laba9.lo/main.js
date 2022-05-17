"use strict"
const field = document.querySelector('.fieldGame');

let nextMove = true; // 0 = X; 1 = O

function fieldTable(){

	let table = document.createElement('table');
	table.classList.add('turnTurn');
	for(let i = 0; i < 3; i++){
		let tr = document.createElement('tr');
		for(let j = 0; j < 3; j++){
			let td = document.createElement('td');
			td.classList.add('bloke');
			tr.appendChild(td);
		}
		table.appendChild(tr);
	}
	field.appendChild(table);

}
fieldTable();

let bloke = document.querySelectorAll('.bloke');

let closed = document.querySelector('.closed');

const moveGame = () => {
	for(let i = 0; i < bloke.length; i++){
		bloke[i].addEventListener('click', () =>{

			if(!bloke[i].classList.contains('closed')){
				if(nextMove){
					bloke[i].innerHTML = "X" 
					nextMove = false;
				} else {
					bloke[i].innerHTML = "O";
					nextMove = true;
				}
				bloke[i].classList.toggle('closed');
			}
			winner();
		});
	}
}


const winner = () => {
	let arayWinner = [[0, 1, 2],[3, 4, 5],[6, 7, 8],
					[0, 3, 6],[1, 4, 7],[2, 5, 8],
					[0, 4, 8],[8, 4, 0]];

	for(let i = 0; i < arayWinner.length; i++){
		if(bloke[arayWinner[i][0]].innerHTML == "X" && bloke[arayWinner[i][1]].innerHTML == "X" && bloke[arayWinner[i][2]].innerHTML == "X"){
			alert("Winner X");
			tryAgain();
			break;
		}
		else if(bloke[arayWinner[i][0]].innerHTML == "O" && bloke[arayWinner[i][1]].innerHTML == "O" && bloke[arayWinner[i][2]].innerHTML == "O"){
			alert("Winner O");
			tryAgain();
			break;
		}
	}
	// noMoves();
	
}


const noMoves = () => {
	for (let i = 0; i < bloke.length; i++){
		if (bloke[i].classList.contains('closed')){
			tryAgain();
		}
	}
}

const tryAgain = () => {
	window.location.reload();
}

moveGame();





