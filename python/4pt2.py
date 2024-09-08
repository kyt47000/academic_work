hours_worked = float(input("Enter the number of hours worked ? "))
hourly_rate = float(input("Enter the hourly rate ? "))

if hours_worked > 40:
    regular_hours = 40
    overtime_hours = hours_worked - 40
else:
    regular_hours = hours_worked
    overtime_hours = 0

regular_pay = regular_hours * hourly_rate
overtime_pay = overtime_hours * hourly_rate * 1.5
total_wages = regular_pay + overtime_pay

print("The total wages for the week are: ", total_wages)
