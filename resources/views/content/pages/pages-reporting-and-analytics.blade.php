@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('content')
<div class="card">
<div class="card-header header-elements p-3 my-n1">
  <h5 class="card-title mb-0 pl-0 pl-sm-2 p-2">Latest Statistics</h5>
  <div class="card-action-element ms-auto py-0">
    <div class="dropdown">
      <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-calendar"></i></button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="card-body">
  <canvas id="barChart" class="chartjs" data-height="400"></canvas>
<script>
// Color Variableslet cardColor, headingColor, labelColor, borderColor, legendColor;

if (isDarkStyle) {
  cardColor = config.colors_dark.cardColor;
  headingColor = config.colors_dark.headingColor;
  labelColor = config.colors_dark.textMuted;
  legendColor = config.colors_dark.bodyColor;
  borderColor = config.colors_dark.borderColor;
} else {
  cardColor = config.colors.cardColor;
  headingColor = config.colors.headingColor;
  labelColor = config.colors.textMuted;
  legendColor = config.colors.bodyColor;
  borderColor = config.colors.borderColor;
}
const barChart = document.getElementById('barChart');
if (barChart) {
  const barChartVar = new Chart(barChart, {
    type: 'bar',
    data: {
      labels: [
        '7/12',
        '8/12',
        '9/12',
        '10/12',
        '11/12',
        '12/12',
        '13/12',
        '14/12',
        '15/12',
        '16/12',
        '17/12',
        '18/12',
        '19/12'
      ],
      datasets: [
        {
          data: [275, 90, 190, 205, 125, 85, 55, 87, 127, 150, 230, 280, 190],
          backgroundColor: cyanColor,
          borderColor: 'transparent',
          maxBarThickness: 15,
          borderRadius: {
            topRight: 15,
            topLeft: 15
          }
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: {
        duration: 500
      },
      plugins: {
        tooltip: {
          rtl: isRtl,
          backgroundColor: cardColor,
          titleColor: headingColor,
          bodyColor: legendColor,
          borderWidth: 1,
          borderColor: borderColor
        },
        legend: {
          display: false
        }
      },
      scales: {
        x: {
          grid: {
            color: borderColor,
            drawBorder: false,
            borderColor: borderColor
          },
          ticks: {
            color: labelColor
          }
        },
        y: {
          min: 0,
          max: 400,
          grid: {
            color: borderColor,
            drawBorder: false,
            borderColor: borderColor
          },
          ticks: {
            stepSize: 100,
            color: labelColor
          }
        }
      }
    }
  });
} </script>
</div>
</div>

@endsection
