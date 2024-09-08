import random

# Create a 4x4 2-dimensional list
matrix = [[random.randint(0, 1) for _ in range(4)] for _ in range(4)]

# Print the list
for row in matrix:
    print(row)

# Find the rows with the most number of 1s
max_row_ones = max(matrix, key=lambda row: row.count(1))
max_row_indices = [i for i, row in enumerate(matrix) if row == max_row_ones]

# Find the columns with the most number of 1s
max_col_ones = max(zip(*matrix), key=lambda col: col.count(1))
max_col_indices = [i for i, col in enumerate(zip(*matrix)) if col == max_col_ones]

print("Rows with the most 1s:", max_row_indices)
print("Columns with the most 1s:", max_col_indices)


