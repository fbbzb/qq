function calculateExpression(a, b, c) {
    try {
        if (a === 0) {
            throw "Ошибка: деление на ноль (a не должно быть равно нулю).";
        }
        let sqrtTerm = Math.sqrt(Math.pow(b, 2) + 4 * a * c);
        if (isNaN(sqrtTerm)) {
            throw "Ошибка: корень из отрицательного числа.";
        }
        let result = ((b + sqrtTerm) / (2 * a)) - (Math.pow(a, 3) * c) + Math.pow(b, -2);
        return result;
    } catch (error) {
        alert(error);
        return null;
    }
}

function displayResult() {
    let a = 1; // Пример значения
    let b = 2; // Пример значения
    let c = 3; // Пример значения
    let result = calculateExpression(a, b, c);
    if (result !== null) {
        document.write("Результат выражения: " + result + "<br>");
    }
}
