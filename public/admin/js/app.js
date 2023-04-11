// Order Chart
let orderID = document.getElementById("salesChart").getContext("2d");
let salesChart = new Chart(orderID, {
  type: "line",
  data: {
    labels: [
      "04 Mar",
      "05 Mar",
      "06 Mar",
      "07 Mar",
      "08 Mar",
      "09 Mar",
      "10Mar",
    ],
    datasets: [
      {
        label: "Total orders count",
        data: [1000, 2355, 5443, 6870, 7223, 4500, 3690],
        fill: true,
        backgroundColor: "#9FC1FB40",
        borderColor: "rgba(62, 130, 247, 1)",
        tension: 0.1,
      },
    ],
  },
  options: {},
});

// Sales chart
let salesID = document.getElementById("orderChart").getContext("2d");
let orderChart = new Chart(salesID, {
  type: "line",
  data: {
    labels: [
      "04 Mar",
      "05 Mar",
      "06 Mar",
      "07 Mar",
      "08 Mar",
      "09 Mar",
      "10Mar",
    ],
    datasets: [
      {
        label: "Total orders count",
        data: [7, 2, 10, 5, 22, 18, 36],
        fill: false,
        borderColor: "rgba(23, 188, 255, 0.85)",
        tension: 0.1,
      },
    ],
  },
  options: {},
});
