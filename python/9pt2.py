import random

def get_user_choice():
    print("Enter your choice:")
    print("0: Scissor")
    print("1: Rock")
    print("2: Paper")
    return int(input())

def get_computer_choice():
    return random.randint(0, 2)

def determine_winner(user_choice, computer_choice):
    if user_choice == computer_choice:
        return "It's a draw!"
    elif (user_choice == 0 and computer_choice == 2) or \
         (user_choice == 1 and computer_choice == 0) or \
         (user_choice == 2 and computer_choice == 1):
        return "You win!"
    else:
        return "You lose!"

# Main game loop
while True:
    user_choice = get_user_choice()
    computer_choice = get_computer_choice()

    print("Computer's choice:", computer_choice)

    result = determine_winner(user_choice, computer_choice)
    print(result)

    play_again = input("Do you want to play again? (yes/no): ").lower()
    if play_again != 'yes':
        break
