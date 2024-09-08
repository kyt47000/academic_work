import math

def calculate_ladder_length(height, angle_degrees):
    # Convert the angle from degrees to radians
    angle_radians = math.radians(angle_degrees)
    
    # Calculate the length of the ladder using the trigonometric relationship
    ladder_length = height / math.sin(angle_radians)
    
    return ladder_length

try:
    height = float(input("Enter the height to reach (in meters) ? "))
    angle_degrees = float(input("Enter the angle of the ladder (in degrees) ? "))
    
    if height <= 0 or angle_degrees <= 0 or angle_degrees >= 90:
        print("Invalid input. Please enter a valid height and angle.")
    else:
        ladder_length = calculate_ladder_length(height, angle_degrees)
        print(f"The length of the ladder required is {ladder_length:.2f} meters.")
except ValueError:
    print("Invalid input. Please enter valid numerical values.")
