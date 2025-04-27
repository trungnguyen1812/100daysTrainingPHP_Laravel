Tạo và kiểm tra mảng:

array() — Tạo một mảng mới.

is_array($var) — Kiểm tra một biến có phải là mảng không.

🔹 Thêm, xóa phần tử:

array_push($array, $value1, $value2, ...) — Thêm một hoặc nhiều phần tử vào cuối mảng.

array_pop($array) — Xóa phần tử cuối cùng của mảng.

array_unshift($array, $value1, $value2, ...) — Thêm một hoặc nhiều phần tử vào đầu mảng.

array_shift($array) — Xóa phần tử đầu tiên của mảng.

🔹 Tìm kiếm và kiểm tra:

in_array($needle, $haystack) — Kiểm tra giá trị có tồn tại trong mảng không.

array_search($needle, $haystack) — Tìm vị trí (key) của giá trị trong mảng.

🔹 Lấy thông tin:

count($array) — Đếm số phần tử trong mảng.

array_keys($array) — Lấy tất cả các key của mảng.

array_values($array) — Lấy tất cả các giá trị của mảng.

🔹 Sắp xếp:

sort($array) — Sắp xếp mảng theo giá trị tăng dần.

rsort($array) — Sắp xếp mảng theo giá trị giảm dần.

asort($array) — Sắp xếp mảng theo giá trị nhưng giữ nguyên key.

ksort($array) — Sắp xếp mảng theo key tăng dần.

krsort($array) — Sắp xếp mảng theo key giảm dần.

🔹 Hàm đặc biệt:

array_merge($array1, $array2, ...) — Gộp nhiều mảng thành một mảng.

array_diff($array1, $array2) — So sánh và lấy phần tử khác nhau giữa hai mảng.

array_intersect($array1, $array2) — Lấy phần tử giống nhau giữa hai mảng.

array_map($callback, $array) — Áp dụng một hàm cho từng phần tử của mảng.

array_filter($array, $callback) — Lọc các phần tử của mảng theo điều kiện.

