import calendar

def print_sundays(year):
    # Iterate over all months in the given year
    for month in range(1, 13):
        # Iterate over all days in the month
        for day in range(1, calendar.monthrange(year, month)[1] + 1):
            # Check if the day is a Sunday (weekday() returns 6 for Sunday)
            if calendar.weekday(year, month, day) == 6:
                print(f"Sundays in {calendar.month_name[month]}, {year}: {calendar.month_abbr[month]} {day}")

# Example usage:
year_to_check = int(input("Enter the year: "))
print_sundays(year_to_check)
