function calculateCost() {
    const values = {
        1: 30,
        2: 40,
        3: 50,
        4: 60,
        5: 70,
        6: 80,
        7: 90,
        8: 100,
        9: 110,
        10: 120,
    }
    document.getElementById('delivery-cost').innerHTML = "pCost";

    var pWeight = document.getElementById('costCal').weight.value;
    var pPrice = document.getElementById('costCal').price.value;
    const percent = (pPrice / 100) * 2

    const deliveryCost = document.getElementById('delivery-cost')
    deliveryCost.innerHTML = (percent + values[pWeight])

}
document.getElementById('costCal').addEventListener('submit', function (e) {
    e.preventDefault()
    calculateCost()
})