# Function to count the occurrences of each digit in a string
def count_digit_occurrences(string):
    digit_counts = {}
    for char in string:
        if char.isdigit():
            if char in digit_counts:
                digit_counts[char] += 1
            else:
                digit_counts[char] = 1
    return digit_counts

# Test the function
string = "12203AB3"
digit_occurrences = count_digit_occurrences(string)
for digit, count in digit_occurrences.items():
    print(f"{digit}: {count} times")
