document.addEventListener("DOMContentLoaded", () => {
  const exchangeRate = 0.0036; // Example exchange rate (1 PKR to USD). You should get the latest rate from a reliable source.

  const fees = [
    { elementId: "fee-regular", pkrAmount: 3000 },
    { elementId: "fee-student", pkrAmount: 4000 },
    { elementId: "fee-professional", pkrAmount: 5000 },
  ];

  fees.forEach((fee) => {
    const feeElement = document.getElementById(fee.elementId);
    const usdAmount = (fee.pkrAmount * exchangeRate).toFixed(2);
    feeElement.innerHTML += ` (approx. ${usdAmount} USD)`;
  });
});
