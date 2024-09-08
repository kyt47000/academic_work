
def is_palindrome(s):
    # Convert the string to lowercase and remove spaces
    cleaned_string = s.lower().replace(" ", "")
    
    # Check if the cleaned string is equal to its reverse
    return cleaned_string == cleaned_string[::-1]

# Example usage:
user_input = input("Enter a string to check if it's a palindrome: ")

if is_palindrome(user_input):
    print(f"{user_input} is a palindrome.")
else:
    print(f"{user_input} is not a palindrome.")
