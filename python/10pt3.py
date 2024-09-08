def format_date(input_date):
    # Split the input date into day, month, and year
    day, month, year = map(int, input_date.split('/'))

    # Format the date in MM-DD-YYYY format
    formatted_date = f"{month:02d}-{day:02d}-{year}"

    return formatted_date

# Example usage:
user_input = input("Enter a date in DD/MM/YYYY format: ")

try:
    formatted_date = format_date(user_input)
    print("Formatted date in MM-DD-YYYY:", formatted_date)
except ValueError:
    print("Invalid date format. Please use DD/MM/YYYY.")
