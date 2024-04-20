import minimalmodbus
import time
import requests

# Define the Modbus instrument
instrument = minimalmodbus.Instrument('COM4', 1)  # Replace 'COM4' with your serial port and 1 with your device ID
instrument.serial.baudrate = 9600
instrument.serial.bytesize = 8
instrument.serial.parity = minimalmodbus.serial.PARITY_NONE
instrument.serial.stopbits = 1
instrument.serial.timeout = 1

# Define the URLs for sending data to the local server
urls = {
    1: "http://localhost/quick-eng/data.php?param=temp&value=",
    3: "http://localhost/quick-eng/data.php?param=humid&value=",
    5: "http://localhost/quick-eng/data.php?param=rain&value=",
    7: "http://localhost/quick-eng/data.php?param=wind_speed&value=",
    9: "http://localhost/quick-eng/data.php?param=wind_dir&value=",
    11: "http://localhost/quick-eng/data.php?param=road_temp&value=",
    13: "http://localhost/quick-eng/data.php?param=visibility&value="
}

# Function to read float values from the Modbus device
def read_data():
    data = {}
    try:
        for register in urls.keys():
            value = instrument.read_float(register, functioncode=3)
            data[register] = value
            print(f"Read data from register {register}: {value}")
    except Exception as e:
        print(f"Error reading data: {e}")
    return data

# Function to send data to the local server
def send_data(data):
    try:
        for register, value in data.items():
            url = urls.get(register)
            if url:
                requests.get(url + str(value))
                print(f"Sent data to {url} - Value: {value}")
    except Exception as e:
        print(f"Error sending data: {e}")

# Main loop to continuously read and send data every 15 seconds
while True:
    data = read_data()
    send_data(data)
    time.sleep(15)
