def rgb_to_base10(rgb_code):
    # Extract the red, green, and blue components
    red = int(rgb_code[0:2], 16)
    green = int(rgb_code[2:4], 16)
    blue = int(rgb_code[4:6], 16)

    return red, green, blue

# Example usage:
user_input = input("Enter a six-digit RGB color code: ")

if len(user_input) == 6 and all(c.isdigit() or c.lower() in 'abcdef' for c in user_input):
    red, green, blue = rgb_to_base10(user_input)
    print(f"Red ({red}), Green ({green}), Blue ({blue})")
else:
    print("Invalid RGB color code. Please enter a valid six-digit hexadecimal code.")
