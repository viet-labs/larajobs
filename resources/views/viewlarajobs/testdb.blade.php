<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Test DB</title>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }

    tr, th, td {
        border: 1px solid black;
        padding: 20px;
    }
  </style>
</head>
<body>
  <div class="lg:content-auto">
    <!-- ... -->
  </div>

  <div class="container">
    <table class="auto-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu Đề</th>
                <th>Hình Thức Làm Việc</th>
                <th>Loại Công Việc</th>
                <th>Địa Chỉ Làm Việc</th>
                <th>Nội Dung</th>
                <th>Mức Lương Tối Thiểu</th>
                <th>Mức Lương Tối Đa</th>
                <th>Lượt Xem</th>
                <th>Ngày Hết Hạn</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
  </div>
</body>
</html>
