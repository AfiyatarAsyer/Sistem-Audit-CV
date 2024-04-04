<!DOCTYPE html>
<html>
<head>
  <title>Tabel Menarik</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 12px 15px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
      text-transform: uppercase;
    }
    td {
      background-color: #fff;
    }
    tr:nth-child(even) td {
      background-color: #f9f9f9;
    }
    tr:hover td {
      background-color: #e6e6e6;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kota</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John Doe</td>
        <td>25</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>Jane Smith</td>
        <td>30</td>
        <td>Los Angeles</td>
      </tr>
      <tr>
        <td>Michael Johnson</td>
        <td>35</td>
        <td>Chicago</td>
      </tr>
    </tbody>
  </table>
</body>
</html>