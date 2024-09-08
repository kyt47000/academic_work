
x1 = float(input("Enter the x-coordinate of the first point (x1): "))
y1 = float(input("Enter the y-coordinate of the first point (y1): "))
x2 = float(input("Enter the x-coordinate of the second point (x2): "))
y2 = float(input("Enter the y-coordinate of the second point (y2): "))

if x1 == x2:
    print("Error: x-coordinates of the two points are the same. Slope is undefined.")
else:
    slope = (y2 - y1) / (x2 - x1)
    print(f"The slope of the line between ({x1}, {y1}) and ({x2}, {y2}) is: {slope}")
