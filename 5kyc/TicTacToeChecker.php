<?php
function is_solved(array $board): int {
    // Проверка всех строк
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) {
            if ($board[$i][0] != 0) {
                return $board[$i][0];
            }
        }
    }

    // Проверка всех столбцов
    for ($i = 0; $i < 3; $i++) {
        if ($board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i]) {
            if ($board[0][$i] != 0) {
                return $board[0][$i];
            }
        }
    }

    // Проверка диагоналей
    if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
        if ($board[0][0] != 0) {
            return $board[0][0];
        }
    }

    if ($board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
        if ($board[0][2] != 0) {
            return $board[0][2];
        }
    }

    // Проверка на наличие свободных полей
    foreach ($board as $row) {
        foreach ($row as $cell) {
            if ($cell == 0) {
                return -1; // Игра не закончена
            }
        }
    }

    return 0; // Ничья
}
?>
