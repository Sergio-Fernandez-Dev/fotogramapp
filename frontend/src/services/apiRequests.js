import axios from "axios";

const baseUrl = "http://localhost:3000/"; 

const doGetRequest = async (entity) => {
  const options = {
    method: "GET",
    url: baseUrl + entity.toLowerCase(),
  };
  const data = await sendRequest(options);

  return data;
}


const sendRequest = async (options) => {
  try {
    const response = await axios.request(options);

    return response.data;
  } catch (error) {
    console.error(error);
  }
}

export { doGetRequest };
