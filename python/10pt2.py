def count_vowels_and_consonants(input_string):
    vowels = "aeiouAEIOU"
    num_vowels = 0
    num_consonants = 0

    for char in input_string:
        if char.isalpha():
            if char.lower() in vowels:
                num_vowels += 1
            else:
                num_consonants += 1

    return num_vowels, num_consonants

# Example usage:
user_input = input("Enter a string: ")
result = count_vowels_and_consonants(user_input)

print(f"Number of vowels: {result[0]}")
print(f"Number of consonants: {result[1]}")
