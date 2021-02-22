let $startBtn = document.querySelector('#start'),
    $gameArea = document.querySelector('#game'),
    $timeGame = document.querySelector('#time'),
    $timeHeader = document.querySelector('#time-header'),
    $resultHeader = document.querySelector('#result-header'),
    $resultScore = document.querySelector('#result'),
    $timeCounter = document.querySelector('#game-time');

let score = 0,
    isGameStarted = false;

$startBtn.addEventListener('click', startGame);
$gameArea.addEventListener('click', handleClickBox);
$timeCounter.addEventListener('input', setTimeGame);

function show($item) {
    $item.classList.remove('hide');
}

function hide($item) {
    $item.classList.add('hide');
}

function startGame() {
    $startBtn.classList.add('hide');
    $gameArea.style.backgroundColor = "#fff";
    isGameStarted = true;
    score = 0;
    setTimeGame();
    $timeCounter.setAttribute('disabled', 'true');

    let intervalGame = setInterval(function () {
        let time = parseFloat($timeGame.textContent);
        if (time <= 0) {
            clearInterval(intervalGame);
            endGame();
        } else {
            $timeGame.textContent = (time - 0.1).toFixed(1);
        }
    }, 100);

    renderBox();
}

function endGame() {
    isGameStarted = false;
    hide($timeHeader);
    show($resultHeader);
    $resultScore.textContent = score;
    $gameArea.innerHTML = '';
    $gameArea.style.backgroundColor = '';
    show($startBtn);
    $timeCounter.removeAttribute('disabled');
}

function renderBox() {
    $gameArea.innerHTML = '';

    let box = document.createElement('div');
    let boxSize = getRandom(30, 100);
    let boxGame = $gameArea.getBoundingClientRect();
    let boxGameTopMax = boxGame.height - boxSize;
    let boxGameLeftMax = boxGame.width - boxSize;

    box.style.height = box.style.width = boxSize + 'px';
    box.style.position = 'absolute';
    box.style.backgroundColor = colorRandom();
    box.style.border = '1px solid #000';
    box.style.cursor = 'pointer';
    box.style.top = getRandom(0, boxGameTopMax) + 'px';
    box.style.left = getRandom(0, boxGameLeftMax) + 'px';
    box.setAttribute('data-box', 'true');

    $gameArea.insertAdjacentElement('afterbegin', box);
}

function handleClickBox(event) {
    if (!isGameStarted) {
        return;
    }
    if (event.target.dataset.box) {
        renderBox();
        score++;
    }
}

function setTimeGame() {
    $timeGame.textContent = $timeCounter.value;
    show($timeHeader);
    hide($resultHeader);
}

function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

function colorRandom() {
    let r = Math.floor(Math.random() * 256),
        g = Math.floor(Math.random() * 256),
        b = Math.floor(Math.random() * 256);
    let color = '#' + r.toString(16) + g.toString(16) + b.toString(16);
    return color;
}