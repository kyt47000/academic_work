def calculate_name_value(name):
    name = name.lower()  # Convert the name to lowercase for case-insensitivity
    value = 0

    for char in name:
        if 'a' <= char <= 'z':
            value += ord(char) - ord('a') + 1

    return value

# Example usage:
user_name = input("Enter a name: ")

name_value = calculate_name_value(user_name)
print(f"The numeric value of the name '{user_name}' is: {name_value}")
