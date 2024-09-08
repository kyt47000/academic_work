import matplotlib.pyplot as plt
import numpy as np

def relu(x):
    return np.maximum(0, x)

# Generate x values from -5 to 5
x_values = np.linspace(-5, 5, 1000)

# Calculate corresponding y values using the ReLU function
y_values = relu(x_values)

# Plot the ReLU function
plt.plot(x_values, y_values, label='ReLU Function')
plt.title('ReLU Function')
plt.xlabel('x')
plt.ylabel('ReLU(x)')
plt.axhline(0, color='black',linewidth=0.5)
plt.axvline(0, color='black',linewidth=0.5)
plt.grid(color = 'gray', linestyle = '--', linewidth = 0.5)
plt.legend()
plt.show()

