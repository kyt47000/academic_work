# Given dictionary containing average daily temperature for each day of the week
temperature_dict = {
    "Monday": 45,
    "Tuesday": 50,
    "Wednesday": 48,
    "Thursday": 42,
    "Friday": 55,
    "Saturday": 38,
    "Sunday": 47
}

# Print all the days with average temperature between 40 and 50 degrees
for day, temperature in temperature_dict.items():
    if 40 <= temperature <= 50:
        print(day)
